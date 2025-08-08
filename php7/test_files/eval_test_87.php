<?php
// Eval injection test variation #87
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>