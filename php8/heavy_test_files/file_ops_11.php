<?php
// File operations #11
$f = fopen("file_11.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>