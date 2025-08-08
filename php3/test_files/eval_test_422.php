<?php
// Eval injection test variation #422
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>