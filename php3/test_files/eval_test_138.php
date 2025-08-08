<?php
// Eval injection test variation #138
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>