<?php
// Eval injection test variation #883
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>