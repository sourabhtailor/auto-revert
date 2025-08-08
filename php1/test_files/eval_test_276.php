<?php
// Eval injection test variation #276
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>