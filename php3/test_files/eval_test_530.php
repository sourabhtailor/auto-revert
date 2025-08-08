<?php
// Eval injection test variation #530
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>