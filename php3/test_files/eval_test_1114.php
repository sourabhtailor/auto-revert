<?php
// Eval injection test variation #1114
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>