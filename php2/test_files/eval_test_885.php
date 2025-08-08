<?php
// Eval injection test variation #885
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>