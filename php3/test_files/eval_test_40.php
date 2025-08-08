<?php
// Eval injection test variation #40
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>