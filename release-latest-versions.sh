#!/bin/bash
#
# Download ACF PRO releases and generate stubs for each one.
#
# apt-get install wget xmlstarlet unzip git
#
# Start: ACF_PRO_KEY="Your ACF PRO license key here" ./release-latest-versions.sh

Get_versions()
{
    # Download page, convert to XML, parse release versions
    wget -q -O- "https://www.advancedcustomfields.com/changelog/" \
        | xmlstarlet fo --html --recover 2>/dev/null \
        | xmlstarlet sel --template --value-of '//div[@class="document-content"]//h2'
}

mkdir -p advanced-custom-fields

while read -r VERSION; do
    ## Process 5.6+ versions only
    #if dpkg --compare-versions "${VERSION}" lt "5.6.0"; then
    #    continue
    #fi
    # Process 6.0+ versions only
    if dpkg --compare-versions "${VERSION}" lt "6.0.0"; then
        continue
    fi

    echo "Releasing ${VERSION} version ..."

    if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
        echo "Tag exists!"
        continue
    fi

    # Download release
    RELEASE="advanced-custom-fields/acf-pro-${VERSION}.zip"
    wget -nv -O "${RELEASE}" \
        "https://connect.advancedcustomfields.com/index.php?p=pro&a=download&t=${VERSION}&k=${ACF_PRO_KEY}"

    if [ "$(file --brief --mime "${RELEASE}")" != "application/zip; charset=binary" ]; then
        echo "Skipping ${VERSION} ..."
        continue
    fi

    # Extract release
    rm -f -r source/advanced-custom-fields-pro
    unzip -q "${RELEASE}" -d source

    # Generate stubs
    echo "Generating stubs ..."
    ./generate.sh

    # Tag version
    git commit --all -m "Generate stubs for ACF PRO ${VERSION}"
    git tag "v${VERSION}"
done < <(Get_versions | tac)
