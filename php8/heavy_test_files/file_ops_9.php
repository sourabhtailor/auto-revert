<?php
// File operations #9
$f = fopen("file_9.txt", "w");
fwrite($f, str_repeat("Test line\n", 1000));
fclose($f);
echo "File written.";
?>