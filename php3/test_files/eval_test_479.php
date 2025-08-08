<?php
// Eval injection test variation #479
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>