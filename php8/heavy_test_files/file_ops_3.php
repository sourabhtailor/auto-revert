<?php
// File operations #3
$f = fopen("file_3.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>