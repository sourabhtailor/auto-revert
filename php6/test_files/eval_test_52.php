<?php
// Eval injection test variation #52
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>