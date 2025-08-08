<?php
// Eval injection test variation #1123
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>