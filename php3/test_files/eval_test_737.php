<?php
// Eval injection test variation #737
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>