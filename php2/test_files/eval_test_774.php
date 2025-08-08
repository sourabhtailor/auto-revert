<?php
// Eval injection test variation #774
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>