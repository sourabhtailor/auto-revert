<?php
// File operations #10
$f = fopen("file_10.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>