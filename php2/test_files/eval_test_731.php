<?php
// Eval injection test variation #731
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>