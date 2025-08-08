<?php
// Eval injection test variation #312
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>