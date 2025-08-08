<?php
// Eval injection test variation #517
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>