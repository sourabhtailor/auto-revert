<?php
// Eval injection test variation #255
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>