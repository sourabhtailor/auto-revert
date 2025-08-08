<?php
// Eval injection test variation #595
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>