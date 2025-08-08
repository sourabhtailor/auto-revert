<?php
// Eval injection test variation #1172
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>