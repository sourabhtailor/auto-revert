<?php
// Eval injection test variation #604
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>