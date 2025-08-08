<?php
// Eval injection test variation #385
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>