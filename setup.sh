### git-pull.sh needs this
mkdir site

### Update the libs and populate download/version.php
cd download
touch version.php

# Call release.php, which populates the version file
php -r '$_GET["f"] = "update_lib" ; $p5jseditor_version=""; include("release.php");'
php -r '$_GET["f"] = "update_p5jseditor" ; include("release.php");'
echo ""
echo "New version.php looks like this:"
cat version.php
echo ""
echo ""
cd - &>/dev/null
