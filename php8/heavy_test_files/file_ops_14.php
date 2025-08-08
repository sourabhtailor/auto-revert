<?php
// File operations #14
$f = fopen("file_14.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>