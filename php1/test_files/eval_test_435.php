<?php
// Eval injection test variation #435
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>