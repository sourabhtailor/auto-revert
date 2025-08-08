<?php
// File operations #5
$f = fopen("file_5.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>