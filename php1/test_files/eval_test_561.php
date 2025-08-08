<?php
// Eval injection test variation #561
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>