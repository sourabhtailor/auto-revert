<?php
// Eval injection test variation #371
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>