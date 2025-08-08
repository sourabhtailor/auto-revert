<?php
// Eval injection test variation #28
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>