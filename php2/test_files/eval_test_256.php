<?php
// Eval injection test variation #256
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>