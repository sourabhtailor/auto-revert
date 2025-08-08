<?php
// Eval injection test variation #287
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>