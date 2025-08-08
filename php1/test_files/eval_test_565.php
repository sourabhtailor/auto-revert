<?php
// Eval injection test variation #565
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>