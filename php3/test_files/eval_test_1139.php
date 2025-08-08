<?php
// Eval injection test variation #1139
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>