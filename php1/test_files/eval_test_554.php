<?php
// Eval injection test variation #554
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>