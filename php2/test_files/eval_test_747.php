<?php
// Eval injection test variation #747
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>