<?php
// Eval injection test variation #1271
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>