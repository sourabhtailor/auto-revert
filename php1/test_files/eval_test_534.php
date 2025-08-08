<?php
// Eval injection test variation #534
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>