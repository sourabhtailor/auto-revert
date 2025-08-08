<?php
// Eval injection test variation #260
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>