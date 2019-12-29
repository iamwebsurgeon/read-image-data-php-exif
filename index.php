<?php
echo "<h2>Image with No Header Data </h2>";
echo "test1.jpg:<br />\n";
$exif = exif_read_data('img/test1.jpg', 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";
echo "<br><br>";
echo "<h2>Image with Header Data </h2>";
$exif = exif_read_data('img/test2.jpg', 0, true);
echo "test2.jpg:<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
?>