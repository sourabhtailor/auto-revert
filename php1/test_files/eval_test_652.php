<?php
// Eval injection test variation #652
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>