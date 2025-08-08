<?php
// File operations #12
$f = fopen("file_12.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>