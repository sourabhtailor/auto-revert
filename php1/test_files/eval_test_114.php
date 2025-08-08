<?php
// Eval injection test variation #114
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>