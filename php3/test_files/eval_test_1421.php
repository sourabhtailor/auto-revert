<?php
// Eval injection test variation #1421
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>