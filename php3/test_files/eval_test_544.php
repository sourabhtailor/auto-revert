<?php
// Eval injection test variation #544
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>