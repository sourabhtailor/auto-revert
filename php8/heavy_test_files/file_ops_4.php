<?php
// File operations #4
$f = fopen("file_4.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>