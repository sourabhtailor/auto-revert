<?php
// Eval injection test variation #104
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>