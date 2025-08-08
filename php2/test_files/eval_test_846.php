<?php
// Eval injection test variation #846
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>