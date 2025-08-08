<?php
// Eval injection test variation #620
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>