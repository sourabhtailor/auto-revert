<?php
// File operations #1
$f = fopen("file_1.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>