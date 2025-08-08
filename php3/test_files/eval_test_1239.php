<?php
// Eval injection test variation #1239
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>