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
    # Process 6.0+ versions only
    if dpkg --compare-versions "${VERSION}" lt "6.0.0"; then
        continue
    fi

    echo "Releasing ${VERSION} version ..."

    if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
        echo "Tag exists!"
        continue
    fi

    # Clear previous source
    rm -f -r source/advanced-custom-fields-pro

    # Download release using Composer
    composer require --dev wpengine/advanced-custom-fields-pro:${VERSION} --ignore-platform-reqs

    # Generate stubs
    echo "Generating stubs ..."
    ./generate.sh

    composer remove --dev wpengine/advanced-custom-fields-pro

    # Tag version
    git commit acf-pro-stubs.php -m "Generate stubs for ACF PRO ${VERSION}"
    git tag "v${VERSION}"
done < <(Get_versions | tac)