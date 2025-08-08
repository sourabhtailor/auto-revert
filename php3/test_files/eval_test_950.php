<?php
// Eval injection test variation #950
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>