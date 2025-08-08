<?php
// Eval injection test variation #749
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>