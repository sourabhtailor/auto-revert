<?php
// File operations #15
$f = fopen("file_15.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>