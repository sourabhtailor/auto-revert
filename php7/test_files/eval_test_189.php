<?php
// Eval injection test variation #189
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>