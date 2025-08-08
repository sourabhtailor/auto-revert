<?php
// Eval injection test variation #206
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>