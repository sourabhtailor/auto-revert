<?php
// Eval injection test variation #314
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>