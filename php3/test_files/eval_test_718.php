<?php
// Eval injection test variation #718
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>