<?php
// Eval injection test variation #322
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>