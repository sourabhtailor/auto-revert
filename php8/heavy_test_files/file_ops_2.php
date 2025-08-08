<?php
// File operations #2
$f = fopen("file_2.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>