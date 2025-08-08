<?php
// Eval injection test variation #426
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>