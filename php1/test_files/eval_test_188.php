<?php
// Eval injection test variation #188
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>