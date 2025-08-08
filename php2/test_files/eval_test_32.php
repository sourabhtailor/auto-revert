<?php
// Eval injection test variation #32
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>