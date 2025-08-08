<?php
// Eval injection test variation #996
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>