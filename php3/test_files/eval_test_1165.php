<?php
// Eval injection test variation #1165
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>