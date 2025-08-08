<?php
// Eval injection test variation #649
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>