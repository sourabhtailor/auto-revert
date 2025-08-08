<?php
// Eval injection test variation #122
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>