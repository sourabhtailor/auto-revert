<?php
// Eval injection test variation #583
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>