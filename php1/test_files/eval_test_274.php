<?php
// Eval injection test variation #274
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>