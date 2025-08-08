<?php
// Eval injection test variation #947
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>