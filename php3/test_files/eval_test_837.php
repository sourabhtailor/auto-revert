<?php
// Eval injection test variation #837
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>