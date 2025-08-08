<?php
// Eval injection test variation #617
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>