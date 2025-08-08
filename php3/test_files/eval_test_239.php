<?php
// Eval injection test variation #239
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>