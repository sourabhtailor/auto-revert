<?php
// Eval injection test variation #100
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>