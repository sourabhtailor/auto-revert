<?php
// Eval injection test variation #897
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>