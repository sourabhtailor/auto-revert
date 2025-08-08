<?php
// Eval injection test variation #48
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>