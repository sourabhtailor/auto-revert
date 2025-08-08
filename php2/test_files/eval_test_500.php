<?php
// Eval injection test variation #500
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>