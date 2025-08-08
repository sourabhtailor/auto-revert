<?php
// Eval injection test variation #1112
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>