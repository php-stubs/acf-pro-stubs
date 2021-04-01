#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for ACF PRO\n * @see https://www.advancedcustomfields.com/\n * @see https://github.com/php-stubs/acf-pro-stubs\n */'

FILE="acf-pro-stubs.php"

set -e

test -f "$FILE"
test -d "source/advanced-custom-fields-pro"

# Download dependencies
if [ ! -d vendor ]; then
    composer update
fi

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Remove determine_locale function
sed -i -e 's#^function determine_locale()$#//&#' "$FILE"

# - Make docblocks start with "/**"
# - Fix type and variable name order for @param
# - Remove remaining parentheses for @param
# - Fix type and variable name order for @return
# - Remove remaining parentheses for @return
# - Fix "void"
find . -type f -name "$FILE" -exec sed \
    -e 's#^\(\s*/\*\)$#\1*#' \
    -e 's#^\(\s*\*\s*@param\s\+\)\(\$\S\+\)\s\+(\(\S\+\))\(.*\)$#\1\3 \2\4#' \
    -e 's#^\(\s*\*\s*@param\s\+\)(\(\S\+\))\(.*\)$#\1\2\3#' \
    -e 's#^\(\s*\*\s*@return\s\+\)\(\$\S\+\)\s\+(\(\S\+\))\(.*\)$#\1\3 \2\4#' \
    -e 's#^\(\s*\*\s*@return\s\+\)(\(\S\+\))\(.*\)$#\1\2\3#' \
    -e 's#n/a#void#i' \
    -i "{}" ";"
