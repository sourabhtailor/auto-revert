<?php
// Eval injection test variation #960
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>