<?php
// Eval injection test variation #830
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>