<?php
// Eval injection test variation #758
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>