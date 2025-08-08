<?php
// File operations #7
$f = fopen("file_7.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>