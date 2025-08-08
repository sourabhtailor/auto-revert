<?php
// Eval injection test variation #139
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>