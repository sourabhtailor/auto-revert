<?php
// Eval injection test variation #727
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>