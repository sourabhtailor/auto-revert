<?php
// File operations #8
$f = fopen("file_8.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>