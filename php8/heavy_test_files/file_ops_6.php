<?php
// File operations #6
$f = fopen("file_6.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>