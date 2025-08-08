<?php
// Eval injection test variation #1099
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>