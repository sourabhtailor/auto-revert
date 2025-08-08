<?php
// Eval injection test variation #150
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>