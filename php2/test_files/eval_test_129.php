<?php
// Eval injection test variation #129
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>