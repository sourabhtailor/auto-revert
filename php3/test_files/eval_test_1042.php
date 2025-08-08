<?php
// Eval injection test variation #1042
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>