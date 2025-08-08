<?php
// File operations #13
$f = fopen("file_13.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>