<?php
// Eval injection test variation #400
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>