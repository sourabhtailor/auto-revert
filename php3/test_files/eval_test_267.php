<?php
// Eval injection test variation #267
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>